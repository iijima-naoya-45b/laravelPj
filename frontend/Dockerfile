# ベースイメージとして Node.js を使用
FROM node:20.12.2

# 作業ディレクトリの設定
WORKDIR /app

# package.jsonとpackage-lock.jsonをコピー
COPY package*.json ./

# 依存関係をインストール
RUN npm install

# ソースコードをコピー
COPY . .

# ポートを公開
EXPOSE 3000

# Next.js 開発モードで起動
CMD ["npm", "run", "dev"]
